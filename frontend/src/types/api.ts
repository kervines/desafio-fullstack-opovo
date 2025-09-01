export type PeriodTypes = 'dias' | 'semanas' | 'meses' | 'anos';
export type Modality = 'presencial' | 'ead' | 'hibrido';

export type Category = {
  id: number;
  titulo: string;
  slug: string;
};

export type Module = {
  id: string;
  curso_id: number;
  titulo: string;
  descricao: string;
};

export type Info = {
  id: string;
  curso_id: number;
  titulo: string;
  descricao: string;
};

export type Course = {
  id: number;
  titulo: string;
  descricao: string;
  lote?: string;
  valor: number;
  valor_matricula: number;
  thumbnail?: string;
  qnt_parcelas: number;
  carga_horaria: number;
  periodo: number;
  tipo_periodo: PeriodTypes;
  modalidade: Modality;
  autor: string;
  categorias: Category[];
  modulos: Module[];
  infos: Info[];
};

export type Resource<T> = {
  data: T;
};
