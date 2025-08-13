import React from 'react';

export default function Article({text, title, url}) {
    return (

<article
  class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-xs dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25"
>
  <img
    alt=""
    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
    class="h-56 w-full object-cover"
  />

  <div class="p-4 sm:p-6">
    <a href="#">
      <h3 class="text-lg font-medium text-gray-900 dark:text-white">
        {title}
      </h3>
    </a>

    <p className=" mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
    {text}
   
    </p>

    <a href={url} class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
      Find out more

      <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
    </a>
  </div>
</article>
    );
}