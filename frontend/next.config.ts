import type { NextConfig } from 'next';
import withFlowbiteReact from "flowbite-react/plugin/nextjs";

const nextConfig: NextConfig = {
  output: 'standalone',
  images: {
    remotePatterns: [new URL('http://localhost/image/**')],
  },
  webpack(config) {
    config.module.rules.push({
      test: /\.svg$/,
      use: [{ loader: '@svgr/webpack', options: { icon: true } }],
    });
    return config;
  },
  experimental: {
    turbo: {
      rules: {
        '*.svg': {
          loaders: ['@svgr/webpack'],
          as: '*.js',
        },
      },
    },
  },
};

export default withFlowbiteReact(nextConfig);