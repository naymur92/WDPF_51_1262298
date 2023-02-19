// Generics

// const addID = <T extends {
//   name: string,
//   age: number
// }>(obj: T) => {
//   let id  = Math.floor(Math.random() * 100);
//   return { ...obj, id };
// }

// let user = addID({
//   name: "Naymur",
//   age: 30,
//   country: "Bangladesh"
// });

// console.log(user.name);

// // let user1 = "Mashrafii";
// // addID(user1);

// let user2 = {
//   name: "Sakib",
//   age: 40
// }
// addID(user2);


// Generic in interface
interface APIResponse<T> {
  status: number;
  type: string;
  data: T;
}

const response1: APIResponse<string> = {
  status: 200,
  type: 'good',
  // data: {
  //   name: 'Test',
  //   something: 300
  // },
  data: 'test'
}