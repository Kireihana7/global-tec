export interface Employee {
  id:number,
  first_name: string;
  middle_name?: string;
  last_name: string;
  other_name?: string;
  countryJob: string;
  citizenship: string;
  personal_ID: string;
  type_ID: string;
  email: string;
  started_in: string; // Puedes ajustar el tipo de este campo según lo necesites
  area: string;
  status: string;
}
