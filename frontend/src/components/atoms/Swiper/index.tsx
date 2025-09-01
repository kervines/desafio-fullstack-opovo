'use client';

import { ReactElement, useRef } from 'react';
import { Swiper as SwiperBase, SwiperSlide } from 'swiper/react';
import { Navigation } from 'swiper/modules';
import SwiperIcon from '@/icons/swiper.svg';

type SwiperProps = {
  items: ReactElement[];
};

export const Swiper = (props: SwiperProps) => {
  const prevRef = useRef(null);
  const nextRef = useRef(null);

  return (
    <div className="relative w-full">
      <button
        ref={prevRef}
        className="w-[40px] h-[90px] flex items-center justify-center absolute left-2 top-1/2 -translate-y-1/2 z-10  bg-[#D0FBEB] opacity-[32%] hover:opacity-100 active:opacity-100 rounded-full shadow-md"
      >
        <SwiperIcon />
      </button>

      {/* Botão Próximo */}
      <button
        ref={nextRef}
        className="w-[40px] h-[90px] flex items-center justify-center absolute right-2 top-1/2 -translate-y-1/2 z-10  bg-[#D0FBEB] opacity-[32%] hover:opacity-100 active:opacity-100 rounded-full shadow-md"
      >
        <SwiperIcon className="rotate-180" />
      </button>
      <SwiperBase
        spaceBetween={16}
        breakpoints={{
          320: {
            slidesPerView: 1.1,
            spaceBetween: 12,
          },
          640: {
            slidesPerView: 2.2,
            spaceBetween: 16,
          },
          800: {
            slidesPerView: 2.5,
            spaceBetween: 16,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 24,
          },
          1440: {
            slidesPerView: 5,
            spaceBetween: 24,
          },
        }}
        // onSlideChange={() => console.log('slide change')}
        // onSwiper={(swiper) => console.log(swiper)}
        modules={[Navigation]}
        navigation={{
          prevEl: prevRef.current,
          nextEl: nextRef.current,
        }}
        onBeforeInit={(swiper) => {
          // conecta os botões customizados ANTES do init
          // eslint-disable-next-line @typescript-eslint/ban-ts-comment
          // @ts-ignore
          swiper.params.navigation.prevEl = prevRef.current;
          // eslint-disable-next-line @typescript-eslint/ban-ts-comment
          // @ts-ignore
          swiper.params.navigation.nextEl = nextRef.current;
        }}
      >
        {props.items.map((item, index) => (
          <SwiperSlide key={`swiper_slide_${index + 1}`}>{item}</SwiperSlide>
        ))}
      </SwiperBase>
    </div>
  );
};
