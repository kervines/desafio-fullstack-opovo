type TagProps = {
  label: string;
  size?: 'medium' | 'low';
};

const tagSizes = {
  medium: 'text-sm',
  low: 'text-xs',
};

export const Tag = (props: TagProps) => {
  return (
    <span
      className={`border-2 font-[Noto_Sans] p-2 ${
        tagSizes[props.size ?? 'medium']
      }  border-secondary-light uppercase text-secondary-light`}
    >
      {props.label}
    </span>
  );
};
