import { Resource } from '@/types/api';
import axios, { Axios, AxiosResponse } from 'axios';

export class ApiService {
  public httpClient: Axios;

  constructor(baseURL: string) {
    this.httpClient = axios.create({
      baseURL,
      responseType: 'json',
      headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
      },
    });
  }

  get<T>(url: string) {
    return this.httpClient
      .get<Resource<T>>(url)
      .then((axiosRes) => axiosRes.data)
      .then((resource) => resource.data);
  }
}

export const apiService = new ApiService(process.env.API_URL_SERVER ?? '/api');
