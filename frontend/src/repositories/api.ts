import { apiService } from '@/services/ApiService';
import { Course } from '@/types/api';

export function getCourses() {
  return apiService.get<Course[]>(`/cursos`);
}

export function getCourseById(id: number) {
  return apiService.get<Course>(`/cursos/${id}`);
}
