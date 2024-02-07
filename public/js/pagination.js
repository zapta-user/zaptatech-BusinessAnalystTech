$(document).ready(function() {
  const blogCards = $(".blogPost");
  const itemsPerPage = 6;
  const container = $(".focusBlog");
  let currentPage = 1;

  function showPage(pageNumber) {
      const startIndex = (pageNumber - 1) * itemsPerPage;
      const endIndex = Math.min(
          startIndex + itemsPerPage,
          blogCards.length
      );

      blogCards.each(function(index) {
          if (index >= startIndex && index < endIndex) {
              $(this).css("display", "flex");
          } else {
              $(this).css("display", "none");
          }
      });

      // Scroll to the top of the container
      if(container[0]){
         container[0].scrollIntoView({
            behavior: "smooth"
        });
      }
   
  }

  // Calculate the number of pages based on the number of cards
  const totalPages = Math.ceil(blogCards.length / itemsPerPage);

  // Create pagination dynamically
  const pagination = $(".pagination");

  function updatePagination() {
      pagination.empty();

      // Add First Page link
      if (currentPage > 1) {
          pagination.append(
              $('<li><i class="fas fa-angle-double-left"></i></li>').click(
                  () => {
                      currentPage = 1;
                      showPage(currentPage);
                      updatePagination();
                  }
              )
          );
      } else {
          pagination.append(
              $('<li><i class="fas fa-angle-double-left"></i></li>').addClass(
                  "disabled"
              )
          );
      }

      // Add Previous Page link
      if (currentPage > 1) {
          pagination.append(
              $('<li><i class="fas fa-angle-left"></i></li>').click(() => {
                  currentPage--;
                  showPage(currentPage);
                  updatePagination();
              })
          );
      } else {
          pagination.append(
              $('<li><i class="fas fa-angle-left"></i></li>').addClass(
                  "disabled"
              )
          );
      }

      // Add page numbers with ellipsis
      for (let i = 1; i <= totalPages; i++) {
          if (
              i === 1 ||
              i === totalPages ||
              (i >= currentPage - 1 && i <= currentPage + 1)
          ) {
              const pageItem = $("<li>").text(i);
              if (i === currentPage) {
                  pageItem.addClass("activePagination");
              }
              pageItem.click(() => {
                  currentPage = i;
                  showPage(i);
                  updatePagination();
              });
              pagination.append(pageItem);
          } else if (pagination.children().last().text() !== "...") {
              pagination.append($("<li>").text("..."));
          }
      }

      // Add Next Page link
      if (currentPage < totalPages) {
          pagination.append(
              $('<li><i class="fas fa-angle-right"></i></li>').click(() => {
                  currentPage++;
                  showPage(currentPage);
                  updatePagination();
              })
          );
      } else {
          pagination.append(
              $('<li><i class="fas fa-angle-right"></i></li>').addClass(
                  "disabled"
              )
          );
      }

      // Add Last Page link
      if (currentPage < totalPages) {
          pagination.append(
              $('<li><i class="fas fa-angle-double-right"></i></li>').click(
                  () => {
                      currentPage = totalPages;
                      showPage(currentPage);
                      updatePagination();
                  }
              )
          );
      } else {
          pagination.append(
              $(
                  '<li><i class="fas fa-angle-double-right"></i></li>'
              ).addClass("disabled")
          );
      }
  }

  // Show the first page by default
  showPage(1);
  updatePagination();
});