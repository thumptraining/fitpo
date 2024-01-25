<x-app-layout title="Form Radio" is-sidebar-open="true" is-header-blur="true">
  <main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
      <h2
        class="text-xl font-medium text-slate-800 lg:text-2xl"
      >
        Form Radio
      </h2>
      <div class="hidden h-full py-1 sm:flex">
        <div class="h-full w-px bg-slate-300"></div>
      </div>
      <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
        <li class="flex items-center space-x-2">
          <a
            class="text-primary transition-colors hover:text-primary-focus"
            href="#"
            >Forms</a
          >
          <svg
            x-ignore
            xmlns="http://www.w3.org/2000/svg"
            class="size-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            />
          </svg>
        </li>
        <li>Form Radio</li>
      </ul>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
      <!-- Basic Radio -->
      <div class="card px-4 pb-4 sm:px-5">
        <div class="my-3 flex h-8 items-center justify-between">
          <h2
            class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
          >
            Basic Radio
          </h2>
          <label class="inline-flex items-center space-x-2">
            <span class="text-xs text-slate-400">Code</span>
            <input
              @change="helpers.toggleCode"
              class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
              type="checkbox"
            />
          </label>
        </div>
        <div class="max-w-2xl">
          <p>
            Radio are generally used in radio groups collections of radio
            buttons describing a set of related options. Check out code for
            detail of usage.
          </p>
          <div
            class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-3"
          >
            <label class="inline-flex items-center space-x-2">
              <input
                checked
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-slate-500 checked:bg-slate-500 hover:border-slate-500 focus:border-slate-500"
                name="basic"
                type="radio"
              />
              <span>Default</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary"
                name="basic"
                type="radio"
              />
              <span>Primary</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-secondary checked:bg-secondary hover:border-secondary focus:border-secondary"
                name="basic"
                type="radio"
              />
              <span>Secondary</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:!border-info checked:bg-info hover:!border-info focus:!border-info"
                name="basic"
                type="radio"
              />
              <span>Info</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:!border-success checked:bg-success hover:!border-success focus:!border-success"
                name="basic"
                type="radio"
              />
              <span>Success</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:!border-warning checked:bg-warning hover:!border-warning focus:!border-warning"
                name="basic"
                type="radio"
              />
              <span>Warning</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:!border-error checked:bg-error hover:!border-error focus:!border-error"
                name="basic"
                type="radio"
              />
              <span>Error</span>
            </label>
          </div>
        </div>
        <div class="code-wrapper hidden pt-4">
          <pre
            class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
            x-init="hljs.highlightElement($el)"
          >
            <code class="language-html" x-ignore>
&lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      checked&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-slate-500 checked:bg-slate-500 hover:border-slate-500 focus:border-slate-500      name=&quot;basic&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Default&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary      name=&quot;basic&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Primary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-secondary checked:bg-secondary hover:border-secondary focus:border-secondary      name=&quot;basic&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Secondary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 checked:!border-info checked:bg-info hover:!border-info focus:!border-info      name=&quot;basic&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Info&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 checked:!border-success checked:bg-success hover:!border-success focus:!border-success      name=&quot;basic&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Success&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 checked:!border-warning checked:bg-warning hover:!border-warning focus:!border-warning      name=&quot;basic&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Warning&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 checked:!border-error checked:bg-error hover:!border-error focus:!border-error      name=&quot;basic&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Error&lt;/p&gt;&#13;&#10;  &lt;/label&gt;</code>
          </pre>
        </div>
      </div>

      <!-- Filled Radio -->
      <div class="card px-4 pb-4 sm:px-5">
        <div class="my-3 flex h-8 items-center justify-between">
          <h2
            class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
          >
            Filled Radio
          </h2>
          <label class="inline-flex items-center space-x-2">
            <span class="text-xs text-slate-400">Code</span>
            <input
              @change="helpers.toggleCode"
              class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
              type="checkbox"
            />
          </label>
        </div>
        <div class="max-w-2xl">
          <p>
            The radio component can be filled. Check out code for detail of
            usage.
          </p>
          <div
            class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-3"
          >
            <label class="inline-flex items-center space-x-2">
              <input
                checked
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:border-slate-500 checked:bg-slate-500 hover:border-slate-500 focus:border-slate-500"
                name="basic_filled"
                type="radio"
              />
              <span>Default</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary"
                name="basic_filled"
                type="radio"
              />
              <span>Primary</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:border-secondary checked:bg-secondary hover:border-secondary focus:border-secondary"
                name="basic_filled"
                type="radio"
              />
              <span>Secondary</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:!border-info checked:!bg-info hover:!border-info focus:!border-info"
                name="basic_filled"
                type="radio"
              />
              <span>Info</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:!border-success checked:!bg-success hover:!border-success focus:!border-success"
                name="basic_filled"
                type="radio"
              />
              <span>Success</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:!border-warning checked:!bg-warning hover:!border-warning focus:!border-warning"
                name="basic_filled"
                type="radio"
              />
              <span>Warning</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:!border-error checked:!bg-error hover:!border-error focus:!border-error"
                name="basic_filled"
                type="radio"
              />
              <span>Error</span>
            </label>
          </div>
        </div>
        <div class="code-wrapper hidden pt-4">
          <pre
            class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
            x-init="hljs.highlightElement($el)"
          >
            <code class="language-html" x-ignore>
&lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      checked&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:border-slate-500 checked:bg-slate-500 hover:border-slate-500 focus:border-slate-500      name=&quot;basic_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Default&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary      name=&quot;basic_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Primary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:border-secondary checked:bg-secondary hover:border-secondary focus:border-secondary      name=&quot;basic_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Secondary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:!border-info checked:!bg-info hover:!border-info focus:!border-info      name=&quot;basic_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Info&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:!border-success checked:!bg-success hover:!border-success focus:!border-success      name=&quot;basic_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Success&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:!border-warning checked:!bg-warning hover:!border-warning focus:!border-warning      name=&quot;basic_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Warning&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 bg-slate-100 checked:!border-error checked:!bg-error hover:!border-error focus:!border-error      name=&quot;basic_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Error&lt;/p&gt;&#13;&#10;  &lt;/label&gt;</code>
          </pre>
        </div>
      </div>

      <!-- Outline Radio -->
      <div class="card px-4 pb-4 sm:px-5">
        <div class="my-3 flex h-8 items-center justify-between">
          <h2
            class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
          >
            Outline Radio
          </h2>
          <label class="inline-flex items-center space-x-2">
            <span class="text-xs text-slate-400">Code</span>
            <input
              @change="helpers.toggleCode"
              class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
              type="checkbox"
            />
          </label>
        </div>
        <div class="max-w-2xl">
          <p>
            The radio component can be outtlined. Check out code for detail
            of usage.
          </p>
          <div
            class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-3"
          >
            <label class="inline-flex items-center space-x-2">
              <input
                checked
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500"
                name="outline"
                type="radio"
              />
              <span>Default</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary"
                name="outline"
                type="radio"
              />
              <span>Primary</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary"
                name="outline"
                type="radio"
              />
              <span>Secondary</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-info checked:!border-info hover:!border-info focus:!border-info"
                name="outline"
                type="radio"
              />
              <span>Info</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-success checked:!border-success hover:!border-success focus:!border-success"
                name="outline"
                type="radio"
              />
              <span>Success</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-warning checked:!border-warning hover:!border-warning focus:!border-warning"
                name="outline"
                type="radio"
              />
              <span>Warning</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-error checked:!border-error hover:!border-error focus:!border-error"
                name="outline"
                type="radio"
              />
              <span>Error</span>
            </label>
          </div>
        </div>
        <div class="code-wrapper hidden pt-4">
          <pre
            class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
            x-init="hljs.highlightElement($el)"
          >
            <code class="language-html" x-ignore>
&lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      checked&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500      name=&quot;outline&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Default&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary      name=&quot;outline&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Primary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary      name=&quot;outline&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Secondary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-info checked:!border-info hover:!border-info focus:!border-info      name=&quot;outline&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Info&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-success checked:!border-success hover:!border-success focus:!border-success      name=&quot;outline&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Success&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-warning checked:!border-warning hover:!border-warning focus:!border-warning      name=&quot;outline&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Warning&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-error checked:!border-error hover:!border-error focus:!border-error      name=&quot;outline&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Error&lt;/p&gt;&#13;&#10;  &lt;/label&gt;</code>
          </pre>
        </div>
      </div>

      <!-- Outline And Filled Radio -->
      <div class="card px-4 pb-4 sm:px-5">
        <div class="my-3 flex h-8 items-center justify-between">
          <h2
            class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
          >
            Outline Filled
          </h2>
          <label class="inline-flex items-center space-x-2">
            <span class="text-xs text-slate-400">Code</span>
            <input
              @change="helpers.toggleCode"
              class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
              type="checkbox"
            />
          </label>
        </div>
        <div class="max-w-2xl">
          <p>
            The radio component can be outlined and filled. Check out code
            for detail of usage.
          </p>
          <div
            class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-3"
          >
            <label class="inline-flex items-center space-x-2">
              <input
                checked
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500"
                name="outline_filled"
                type="radio"
              />
              <span>Default</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary"
                name="outline_filled"
                type="radio"
              />
              <span>Primary</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary"
                name="outline_filled"
                type="radio"
              />
              <span>Secondary</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:!bg-info checked:!border-info hover:!border-info focus:!border-info"
                name="outline_filled"
                type="radio"
              />
              <span>Info</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:!bg-success checked:!border-success hover:!border-success focus:!border-success"
                name="outline_filled"
                type="radio"
              />
              <span>Success</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:!bg-warning checked:!border-warning hover:!border-warning focus:!border-warning"
                name="outline_filled"
                type="radio"
              />
              <span>Warning</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:!bg-error checked:!border-error hover:!border-error focus:!border-error"
                name="outline_filled"
                type="radio"
              />
              <span>Error</span>
            </label>
          </div>
        </div>
        <div class="code-wrapper hidden pt-4">
          <pre
            class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
            x-init="hljs.highlightElement($el)"
          >
            <code class="language-html" x-ignore>
&lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      checked&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500      name=&quot;outline_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Default&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary      name=&quot;outline_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Primary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary      name=&quot;outline_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Secondary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:!bg-info checked:!border-info hover:!border-info focus:!border-info      name=&quot;outline_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Info&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:!bg-success checked:!border-success hover:!border-success focus:!border-success      name=&quot;outline_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Success&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:!bg-warning checked:!border-warning hover:!border-warning focus:!border-warning      name=&quot;outline_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Warning&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 bg-slate-100 before:!bg-error checked:!border-error hover:!border-error focus:!border-error      name=&quot;outline_filled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Error&lt;/p&gt;&#13;&#10;  &lt;/label&gt;</code>
          </pre>
        </div>
      </div>

      <!-- Outline Squircle -->
      <div class="card px-4 pb-4 sm:px-5">
        <div class="my-3 flex h-8 items-center justify-between">
          <h2
            class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
          >
            Outline Squircle
          </h2>
          <label class="inline-flex items-center space-x-2">
            <span class="text-xs text-slate-400">Code</span>
            <input
              @change="helpers.toggleCode"
              class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
              type="checkbox"
            />
          </label>
        </div>
        <div class="max-w-2xl">
          <p>
            The radio component can have a squircle shape. Check out code
            for detail of usage
          </p>
          <div
            class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-3"
          >
            <label class="inline-flex items-center space-x-2">
              <input
                checked
                class="form-radio is-outline size-5 rounded-md border-slate-400/70 before:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500"
                name="outline_squircle"
                type="radio"
              />
              <span>Default</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-md border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary"
                name="outline_squircle"
                type="radio"
              />
              <span>Primary</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-md border-slate-400/70 before:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary"
                name="outline_squircle"
                type="radio"
              />
              <span>Secondary</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-md border-slate-400/70 before:!bg-info checked:!border-info hover:!border-info focus:!border-info"
                name="outline_squircle"
                type="radio"
              />
              <span>Info</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-md border-slate-400/70 before:!bg-success checked:!border-success hover:!border-success focus:!border-success"
                name="outline_squircle"
                type="radio"
              />
              <span>Success</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-md border-slate-400/70 before:!bg-warning checked:!border-warning hover:!border-warning focus:!border-warning"
                name="outline_squircle"
                type="radio"
              />
              <span>Warning</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-outline size-5 rounded-md border-slate-400/70 before:!bg-error checked:!border-error hover:!border-error focus:!border-error"
                name="outline_squircle"
                type="radio"
              />
              <span>Error</span>
            </label>
          </div>
        </div>
        <div class="code-wrapper hidden pt-4">
          <pre
            class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
            x-init="hljs.highlightElement($el)"
          >
            <code class="language-html" x-ignore>
&lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      checked&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-md border-slate-400/70 before:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500      name=&quot;outline_squircle&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Default&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-md border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary      name=&quot;outline_squircle&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Primary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-md border-slate-400/70 before:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary      name=&quot;outline_squircle&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Secondary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-md border-slate-400/70 before:!bg-info checked:!border-info hover:!border-info focus:!border-info      name=&quot;outline_squircle&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Info&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-md border-slate-400/70 before:!bg-success checked:!border-success hover:!border-success focus:!border-success      name=&quot;outline_squircle&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Success&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-md border-slate-400/70 before:!bg-warning checked:!border-warning hover:!border-warning focus:!border-warning      name=&quot;outline_squircle&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Warning&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-outline size-5 rounded-md border-slate-400/70 before:!bg-error checked:!border-error hover:!border-error focus:!border-error      name=&quot;outline_squircle&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Error&lt;/p&gt;&#13;&#10;  &lt;/label&gt;</code>
          </pre>
        </div>
      </div>

      <!-- Disabled Radio-->
      <div class="card px-4 pb-4 sm:px-5">
        <div class="my-3 flex h-8 items-center justify-between">
          <h2
            class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
          >
            Disabled Radio
          </h2>
          <label class="inline-flex items-center space-x-2">
            <span class="text-xs text-slate-400">Code</span>
            <input
              @change="helpers.toggleCode"
              class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
              type="checkbox"
            />
          </label>
        </div>
        <div class="max-w-2xl">
          <p>
            The radio have their own style when disabled. Check out code for
            detail of usage.
          </p>
          <div
            class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-3"
          >
            <label class="inline-flex items-center space-x-2">
              <input
                disabled
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary disabled:pointer-events-none disabled:border-slate-300 disabled:opacity-60"
                name="disabled"
                type="radio"
              />
              <span>Primary</span>
            </label>

            <label class="inline-flex items-center space-x-2">
              <input
                disabled
                checked
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary disabled:pointer-events-none disabled:border-slate-300 disabled:opacity-60"
                name="disabled"
                type="radio"
              />
              <span>Primary</span>
            </label>
          </div>
        </div>
        <div class="code-wrapper hidden pt-4">
          <pre
            class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
            x-init="hljs.highlightElement($el)"
          >
            <code class="language-html" x-ignore>
&lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      disabled&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary disabled:pointer-events-none disabled:border-slate-300 disabled:opacity-60      name=&quot;disabled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Primary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      disabled&#13;&#10;      checked&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary disabled:pointer-events-none disabled:border-slate-300 disabled:opacity-60      name=&quot;disabled&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;Primary&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;</code>
          </pre>
        </div>
      </div>

      <!-- Radio Size -->
      <div class="card px-4 pb-4 sm:px-5">
        <div class="my-3 flex h-8 items-center justify-between">
          <h2
            class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
          >
            Radio Size
          </h2>
          <label class="inline-flex items-center space-x-2">
            <span class="text-xs text-slate-400">Code</span>
            <input
              @change="helpers.toggleCode"
              class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
              type="checkbox"
            />
          </label>
        </div>
        <div class="max-w-2xl">
          <p>
            The radio component can have various sizes. Check out code for
            detail of usage.
          </p>
          <div class="inline-space mt-5 flex flex-wrap items-center">
            <label class="inline-flex items-center space-x-2">
              <input
                checked
                class="form-radio is-basic size-3 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary"
                name="size"
                type="radio"
              />
              <span>1</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-3.5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary"
                name="size"
                type="radio"
              />
              <span>2</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-4 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary"
                name="size"
                type="radio"
              />
              <span>3</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-4.5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary"
                name="size"
                type="radio"
              />
              <span>4</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary"
                name="size"
                type="radio"
              />
              <span>5</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-radio is-basic size-6 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary"
                name="size"
                type="radio"
              />
              <span>6</span>
            </label>
          </div>
        </div>
        <div class="code-wrapper hidden pt-4">
          <pre
            class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
            x-init="hljs.highlightElement($el)"
          >
            <code class="language-html" x-ignore>
&lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      checked&#13;&#10;      class=&quot;form-radio is-basic size-3 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary      name=&quot;size&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;1&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-3.5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary      name=&quot;size&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;2&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-4 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary      name=&quot;size&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;3&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-4.5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary      name=&quot;size&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;4&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary      name=&quot;size&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;5&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;  &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      class=&quot;form-radio is-basic size-6 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary      name=&quot;size&quot;&#13;&#10;      type=&quot;radio&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;p&gt;6&lt;/p&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;</code>
          </pre>
        </div>
      </div>

      <!-- Radio Model -->
      <div class="card px-4 pb-4 sm:px-5">
        <div class="my-3 flex h-8 items-center justify-between">
          <h2
            class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
          >
            Radio Model
          </h2>
          <label class="inline-flex items-center space-x-2">
            <span class="text-xs text-slate-400">Code</span>
            <input
              @change="helpers.toggleCode"
              class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
              type="checkbox"
            />
          </label>
        </div>
        <div class="max-w-2xl">
          <p>
            Model allows you to bind the value of an input element to data
            Check out code for detail of usage.
          </p>
          <div class="mt-5" x-data="{selectedFruit: ['apple']}">
            <div class="inline-space">
              <label class="inline-flex items-center space-x-2">
                <input
                  x-model="selectedFruit"
                  value="apple"
                  class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary"
                  name="model"
                  type="radio"
                />
                <span>Apple</span>
              </label>
              <label class="inline-flex items-center space-x-2">
                <input
                  x-model="selectedFruit"
                  value="pineapple"
                  class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary"
                  name="model"
                  type="radio"
                />
                <span>PineApple</span>
              </label>
              <label class="inline-flex items-center space-x-2">
                <input
                  x-model="selectedFruit"
                  value="strawberry"
                  class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-info checked:!border-info hover:!border-info focus:!border-info"
                  name="model"
                  type="radio"
                />
                <span>Strawberry</span>
              </label>
              <label class="inline-flex items-center space-x-2">
                <input
                  x-model="selectedFruit"
                  value="orange"
                  class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-success checked:!border-success hover:!border-success focus:!border-success"
                  name="model"
                  type="radio"
                />
                <span>Orange</span>
              </label>
            </div>
            <p>Value <span x-text="selectedFruit"></span></p>
          </div>
        </div>
        <div class="code-wrapper hidden pt-4">
          <pre
            class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
            x-init="hljs.highlightElement($el)"
          >
            <code class="language-html" x-ignore>
&lt;div x-data=&quot;{selectedFruit: [&apos;apple&apos;]}&quot;&gt;&#13;&#10;    &lt;div class=&quot;inline-space&quot;&gt;&#13;&#10;      &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;        &lt;input&#13;&#10;          x-model=&quot;selectedFruit&quot;&#13;&#10;          value=&quot;apple&quot;&#13;&#10;          class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary          name=&quot;model&quot;&#13;&#10;          type=&quot;radio&quot;&#13;&#10;        /&gt;&#13;&#10;        &lt;p&gt;Apple&lt;/p&gt;&#13;&#10;      &lt;/label&gt;&#13;&#10;      &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;        &lt;input&#13;&#10;          x-model=&quot;selectedFruit&quot;&#13;&#10;          value=&quot;pineapple&quot;&#13;&#10;          class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary          name=&quot;model&quot;&#13;&#10;          type=&quot;radio&quot;&#13;&#10;        /&gt;&#13;&#10;        &lt;p&gt;PineApple&lt;/p&gt;&#13;&#10;      &lt;/label&gt;&#13;&#10;      &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;        &lt;input&#13;&#10;          x-model=&quot;selectedFruit&quot;&#13;&#10;          value=&quot;strawberry&quot;&#13;&#10;          class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-info checked:!border-info hover:!border-info focus:!border-info          name=&quot;model&quot;&#13;&#10;          type=&quot;radio&quot;&#13;&#10;        /&gt;&#13;&#10;        &lt;p&gt;Strawberry&lt;/p&gt;&#13;&#10;      &lt;/label&gt;&#13;&#10;      &lt;label class=&quot;inline-flex items-center space-x-2&quot;&gt;&#13;&#10;        &lt;input&#13;&#10;          x-model=&quot;selectedFruit&quot;&#13;&#10;          value=&quot;orange&quot;&#13;&#10;          class=&quot;form-radio is-outline size-5 rounded-full border-slate-400/70 before:!bg-success checked:!border-success hover:!border-success focus:!border-success          name=&quot;model&quot;&#13;&#10;          type=&quot;radio&quot;&#13;&#10;        /&gt;&#13;&#10;        &lt;p&gt;Orange&lt;/p&gt;&#13;&#10;      &lt;/label&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;p&gt;Value &lt;span x-text=&quot;selectedFruit&quot;&gt;&lt;/span&gt;&lt;/p&gt;&#13;&#10;  &lt;/div&gt;</code>
          </pre>
        </div>
      </div>
    </div>
  </main>
</x-app-layout>
