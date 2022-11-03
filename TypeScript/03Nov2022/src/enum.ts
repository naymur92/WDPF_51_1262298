// ENUMS

enum RType {
  SUCCESS,
  FAILURE,
  UNAUTHENTICATED,
  FORBIDDEN
}

interface APIResponse<T> {
  status: number;
  type: RType;
  data: T;
}

const response2: APIResponse<string> = {
  status: 200,
  type: RType.FAILURE,
  data: 'test'
}

console.log(response2);