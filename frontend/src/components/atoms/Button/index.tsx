import { PropsWithChildren } from 'react';

export const Button = (props: PropsWithChildren) => {
  return (
    <button className="bg-secondary-low hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full text-center flex items-center">
      {props.children}
    </button>
  );
};
