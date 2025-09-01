'use client';

import Image from 'next/image';
import { MenuItem, MenuItemProps } from '../../atoms/MenuItem';
import { Hamburger } from '../../atoms/Hamburger';
import { MenuProvider, useMenu } from '@/contexts/menu';
import UaneIcon from '@/icons/uane.svg';
import ProfileIcon from '@/icons/profile.svg';

const menuItems: MenuItemProps[] = [
  {
    link: '#cursos',
    label: 'Cursos',
  },
  {
    link: '#professores',
    label: 'Professores',
  },
  {
    link: '#sobre',
    label: 'Sobre a Uane',
  },
  {
    link: '#parcerias',
    label: 'Parcerias',
  },
  {
    link: '#portal',
    label: 'Portal do Aluno',
    beforeElement: <ProfileIcon />,
  },
];

const MenuContainer = () => {
  const { menuOpen } = useMenu();

  return (
    <nav
      className={`menu ${
        menuOpen && 'h-screen'
      } w-screen flex flex-col 2xl:flex-row 2xl:justify-between 2xl:px-[72px]`}
    >
      <div className="flex justify-between">
        <UaneIcon />
        <Hamburger />
      </div>

      {menuOpen && (
        <ul className="mt-4 flex 2xl:hidden flex-col text-sm gap-4 uppercase font-bold font-sans items-start">
          {menuItems.map((menu) => (
            <MenuItem
              className="border-b w-full last:border-none p-4"
              key={menu.link}
              {...menu}
            />
          ))}
        </ul>
      )}

      {!menuOpen && (
        <ul className="hidden 2xl:flex text-sm gap-[32px] uppercase font-bold font-sans items-center">
          {menuItems.map((menu) => (
            <MenuItem key={menu.link} {...menu} />
          ))}
        </ul>
      )}
    </nav>
  );
};

export const Menu = () => {
  return (
    <MenuProvider>
      <MenuContainer />
    </MenuProvider>
  );
};
