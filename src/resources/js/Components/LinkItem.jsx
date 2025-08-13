// src/Components/LinkItem.jsx
import React from 'react';

export default function LinkItem({ url }) {
  return (
    <a href={url} class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
      Find out more

      <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
    </a>
  );
}