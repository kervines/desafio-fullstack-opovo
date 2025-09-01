'use client';

import AccordionIcon from '@/icons/accordion.svg';
import { ReactElement, useEffect } from 'react';
import {
  Accordion as AccordionBase,
  AccordionContent,
  AccordionPanel,
  AccordionTitle,
} from 'flowbite-react';
import { initAccordions } from 'flowbite';

type AccordionProps = {
  items: { id: string; title: string; content: ReactElement }[];
  className?: string;
};

const customTheme = {
  root: {
    base: '!border-0',
  },
  content: {
    base: 'p-3 !bg-white !text-dark !border-0 !rounded-b-sm',
  },
  title: {
    arrow: {
      base: 'h-6 w-6 md:h-12 w-12 shrink-0',
      open: {
        off: '',
        on: 'rotate-180',
      },
    },
    base: '!bg-gray-low focus:!ring-0 !border-0 mt-4 rounded-t-sm !text-base md:!text-2xl',
    open: {
      off: '!rounded-sm !text-secondary-medium bg-white',
      on: '!text-primary-medium',
    },
  },
};

export const Accordion = (props: AccordionProps) => {
  useEffect(() => {
    initAccordions();
  }, []);

  return (
    <AccordionBase theme={customTheme.root} collapseAll>
      {props.items.map((item) => (
        <AccordionPanel key={item.id} className="!border mb-4">
          <AccordionTitle theme={customTheme.title} className="">
            {item.title}
          </AccordionTitle>
          <AccordionContent theme={customTheme.content} className="">
            {item.content}
          </AccordionContent>
        </AccordionPanel>
      ))}
    </AccordionBase>
  );
};
