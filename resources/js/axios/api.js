import axios from 'axios';

const API = axios.create({
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json',
  }
});

const cancelTokenSources = {};

export function getCancelTokenSource(identifier) {
  if (cancelTokenSources[identifier]) {
    cancelTokenSources[identifier].cancel('Request canceled');
  }

  cancelTokenSources[identifier] = axios.CancelToken.source();
  return cancelTokenSources[identifier].token;
}

API.interceptors.request.use(config => {
  const url = config.url.split('?')[0]; // Extract base URL without query parameters
  config.cancelToken = getCancelTokenSource(url);
  return config;
});

export default API;
