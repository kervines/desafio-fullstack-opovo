'use client';

import HamburgerIcon from '@/icons/hamburger.svg';
import CloseIcon from '@/icons/close.svg';
import { useState } from 'react';
import { useMenu } from '@/contexts/menu';

export const Hamburger = () => {
  const { menuOpen, toogleMenu } = useMenu();

  return (
    <>
      {!menuOpen && (
        <HamburgerIcon className="flex 2xl:hidden" onClick={toogleMenu} />
      )}
      {menuOpen && (
        <CloseIcon
          className="flex 2xl:hidden h-[30px] w-[24px] fill-white"
          onClick={toogleMenu}
        />
      )}
    </>
  );
};
