<x-app-layout title="Accordion Component" is-sidebar-open="true" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 lg:text-2xl">
                Accordion
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus"
                        href="#">Components</a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>Accordion</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Basic Accordion -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base">
                        Basic Accordion
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }" class="mt-5 flex flex-col">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700">
                                <p>Accordion Item 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700">
                                <p>Accordion Item 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700">
                                <p>Accordion Item 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>
  &lt;div x-data=&quot;{expandedItem:null}&quot; class=&quot;flex flex-col&quot;&gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-1&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 1&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-2&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 2&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-3&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 3&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;
                </code>
              </pre>
                </div>
            </div>

            <!-- Border Bottom -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base">
                        Border Bottom
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }"
                        class="mt-5 flex flex-col divide-y divide-slate-150">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700">
                                <p>Accordion Item 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700">
                                <p>Accordion Item 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700">
                                <p>Accordion Item 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>
  &lt;div&#13;&#10;    x-data=&quot;{expandedItem:null}&quot;&#13;&#10;    class=&quot;flex flex-col divide-y divide-slate-150  &gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-1&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 1&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;pb-4&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-2&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 2&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;pb-4&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-3&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 3&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;pb-4&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;
                </code>
              </pre>
                </div>
            </div>

            <!-- Full Bordered -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base">
                        Full Bordered
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }"
                        class="mt-5 flex flex-col divide-y divide-slate-150 rounded-lg border border-slate-150">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5">
                                <p>Accordion Item 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5">
                                <p>Accordion Item 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5">
                                <p>Accordion Item 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>
  &lt;div&#13;&#10;    x-data=&quot;{expandedItem:null}&quot;&#13;&#10;    class=&quot;flex flex-col divide-y divide-slate-150 rounded-lg border border-slate-150  &gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-1&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 1&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 pb-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-2&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 2&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 pb-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-3&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 3&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 pb-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
              </pre>
                </div>
            </div>

            <!-- Divided Items -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base">
                        Divided Items
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }"
                        class="mt-5 flex flex-col space-y-4 rounded-lg sm:space-y-5 lg:space-y-6">
                        <div x-data="accordionItem('item-1')" class="rounded-lg border border-slate-150">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5">
                                <p>Accordion Item 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')" class="rounded-lg border border-slate-150">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5">
                                <p>Accordion Item 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')" class="rounded-lg border border-slate-150">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5">
                                <p>Accordion Item 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>
  &lt;div&#13;&#10;    x-data=&quot;{expandedItem:null}&quot;&#13;&#10;    class=&quot;flex flex-col space-y-4 rounded-lg sm:space-y-5 lg:space-y-6&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div&#13;&#10;      x-data=&quot;accordionItem(&apos;item-1&apos;)&quot;&#13;&#10;      class=&quot;rounded-lg border border-slate-150    &gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 1&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 pb-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;mt-4 flex justify-between&quot;&gt;&#13;&#10;            &lt;div class=&quot;flex flex-wrap -space-x-2&quot;&gt;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white                &gt;&#13;&#10;                  jd&#13;&#10;                &lt;/div&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/div&gt;&#13;&#10;            &lt;button&#13;&#10;              class=&quot;btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;size-5 rotate-45&quot;&#13;&#10;                fill=&quot;none&quot;&#13;&#10;                viewBox=&quot;0 0 24 24&quot;&#13;&#10;                stroke=&quot;currentColor&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  stroke-linecap=&quot;round&quot;&#13;&#10;                  stroke-linejoin=&quot;round&quot;&#13;&#10;                  stroke-width=&quot;2&quot;&#13;&#10;                  d=&quot;M7 11l5-5m0 0l5 5m-5-5v12&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      x-data=&quot;accordionItem(&apos;item-2&apos;)&quot;&#13;&#10;      class=&quot;rounded-lg border border-slate-150    &gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 2&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 pb-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;mt-4 flex justify-between&quot;&gt;&#13;&#10;            &lt;div class=&quot;flex flex-wrap -space-x-2&quot;&gt;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white                &gt;&#13;&#10;                  jd&#13;&#10;                &lt;/div&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/div&gt;&#13;&#10;            &lt;button&#13;&#10;              class=&quot;btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;size-5 rotate-45&quot;&#13;&#10;                fill=&quot;none&quot;&#13;&#10;                viewBox=&quot;0 0 24 24&quot;&#13;&#10;                stroke=&quot;currentColor&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  stroke-linecap=&quot;round&quot;&#13;&#10;                  stroke-linejoin=&quot;round&quot;&#13;&#10;                  stroke-width=&quot;2&quot;&#13;&#10;                  d=&quot;M7 11l5-5m0 0l5 5m-5-5v12&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      x-data=&quot;accordionItem(&apos;item-3&apos;)&quot;&#13;&#10;      class=&quot;rounded-lg border border-slate-150    &gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 3&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-slate-400 transition-transform duration-300        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 pb-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;mt-4 flex justify-between&quot;&gt;&#13;&#10;            &lt;div class=&quot;flex flex-wrap -space-x-2&quot;&gt;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white                &gt;&#13;&#10;                  jd&#13;&#10;                &lt;/div&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/div&gt;&#13;&#10;            &lt;button&#13;&#10;              class=&quot;btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;size-5 rotate-45&quot;&#13;&#10;                fill=&quot;none&quot;&#13;&#10;                viewBox=&quot;0 0 24 24&quot;&#13;&#10;                stroke=&quot;currentColor&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  stroke-linecap=&quot;round&quot;&#13;&#10;                  stroke-linejoin=&quot;round&quot;&#13;&#10;                  stroke-width=&quot;2&quot;&#13;&#10;                  d=&quot;M7 11l5-5m0 0l5 5m-5-5v12&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
              </pre>
                </div>
            </div>

            <!-- Primary Accordion -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base">
                        Primary Accordion
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }"
                        class="mt-5 flex flex-col divide-y divide-indigo-400 overflow-hidden rounded-lg border border-primary">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between bg-primary px-4 py-4 text-base font-medium text-white sm:px-5">
                                <p>Accordion Item 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-indigo-100 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between bg-primary px-4 py-4 text-base font-medium text-white sm:px-5">
                                <p>Accordion Item 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-indigo-100 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between bg-primary px-4 py-4 text-base font-medium text-white sm:px-5">
                                <p>Accordion Item 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-indigo-100 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="flex space-x-2 pt-3">
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 1
                                        </a>
                                        <a href="#"
                                            class="tag rounded-full border border-primary text-primary">
                                            Tag 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>
  &lt;div&#13;&#10;    x-data=&quot;{expandedItem:null}&quot;&#13;&#10;    class=&quot;flex flex-col divide-y divide-indigo-400 overflow-hidden rounded-lg border border-primary  &gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-1&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between bg-primary px-4 py-4 text-base font-medium text-white sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 1&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-indigo-100 transition-transform duration-300&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 py-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-2&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between bg-primary px-4 py-4 text-base font-medium text-white sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 2&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-indigo-100 transition-transform duration-300&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 py-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div x-data=&quot;accordionItem(&apos;item-3&apos;)&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        @click=&quot;expanded = !expanded&quot;&#13;&#10;        class=&quot;flex cursor-pointer items-center justify-between bg-primary px-4 py-4 text-base font-medium text-white sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;p&gt;Accordion Item 3&lt;/p&gt;&#13;&#10;        &lt;div&#13;&#10;          :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;          class=&quot;text-sm font-normal leading-none text-indigo-100 transition-transform duration-300&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;i class=&quot;fas fa-chevron-down&quot;&gt;&lt;/i&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 py-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;flex space-x-2 pt-3&quot;&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 1&#13;&#10;            &lt;/a&gt;&#13;&#10;            &lt;a&#13;&#10;              href=&quot;#&quot;&#13;&#10;              class=&quot;tag rounded-full border border-primary text-primary            &gt;&#13;&#10;              Tag 2&#13;&#10;            &lt;/a&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
              </pre>
                </div>
            </div>

            <!-- Advanced Accordion -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base">
                        Advanced Accordion
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }" class="mt-5 flex flex-col space-y-4 sm:space-y-5 lg:space-y-6">
                        <div x-data="accordionItem('item-1')"
                            class="overflow-hidden rounded-lg border border-slate-150">
                            <div
                                class="flex items-center justify-between bg-slate-150 px-4 py-4 sm:px-5">
                                <div class="flex items-center space-x-3.5 tracking-wide outline-none transition-all">
                                    <div class="avatar size-10">
                                        <img class="rounded-full" src="{{asset('images/200x200.png')}}" alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="text-slate-700 line-clamp-1">
                                            Simon Tods
                                        </p>
                                        <p class="text-xs text-slate-500">
                                            Web Developer
                                        </p>
                                    </div>
                                </div>
                                <button @click="expanded = !expanded"
                                    class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                    <i :class="expanded && '-rotate-180'"
                                        class="fas fa-chevron-down text-sm transition-transform"></i>
                                </button>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')"
                            class="overflow-hidden rounded-lg border border-slate-150">
                            <div
                                class="flex items-center justify-between bg-slate-150 px-4 py-4 sm:px-5">
                                <div class="flex items-center space-x-3.5 tracking-wide outline-none transition-all">
                                    <div class="avatar size-10">
                                        <div class="is-initial rounded-full bg-warning uppercase text-white">
                                            KG
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-slate-700 line-clamp-1">
                                            Konnor Guzman
                                        </p>
                                        <p class="text-xs text-slate-500">
                                            Frontend Developer
                                        </p>
                                    </div>
                                </div>
                                <button @click="expanded = !expanded"
                                    class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                    <i :class="expanded && '-rotate-180'"
                                        class="fas fa-chevron-down text-sm transition-transform"></i>
                                </button>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')"
                            class="overflow-hidden rounded-lg border border-slate-150">
                            <div
                                class="flex items-center justify-between bg-slate-150 px-4 py-4 sm:px-5">
                                <div class="flex items-center space-x-3.5 tracking-wide outline-none transition-all">
                                    <div class="avatar size-10">
                                        <img class="rounded-full" src="{{asset('images/200x200.png')}}" alt="avatar" />
                                    </div>
                                    <div>
                                        <p class="text-slate-700 line-clamp-1">
                                            Derrick Simmons
                                        </p>
                                        <p class="text-xs text-slate-500">
                                            UI/UX Designer
                                        </p>
                                    </div>
                                </div>
                                <button @click="expanded = !expanded"
                                    class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                    <i :class="expanded && '-rotate-180'"
                                        class="fas fa-chevron-down text-sm transition-transform"></i>
                                </button>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>

                                            <div class="avatar size-7 hover:z-10">
                                                <img class="rounded-full ring ring-white"
                                                    src="{{asset('images/200x200.png')}}" alt="avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
                <code class="language-html" x-ignore>
  &lt;div&#13;&#10;    x-data=&quot;{expandedItem:null}&quot;&#13;&#10;    class=&quot;flex flex-col space-y-4 sm:space-y-5 lg:space-y-6&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div&#13;&#10;      x-data=&quot;accordionItem(&apos;item-1&apos;)&quot;&#13;&#10;      class=&quot;overflow-hidden rounded-lg border border-slate-150    &gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;flex items-center justify-between bg-slate-150 px-4 py-4 sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;flex items-center space-x-3.5 tracking-wide outline-none transition-all&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;div class=&quot;avatar size-10&quot;&gt;&#13;&#10;            &lt;img&#13;&#10;              class=&quot;rounded-full&quot;&#13;&#10;              src=&quot;images/200x200.png&quot;&#13;&#10;              alt=&quot;avatar&quot;&#13;&#10;            /&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;div&gt;&#13;&#10;            &lt;p class=&quot;text-slate-700 line-clamp-1              Simon Tods&#13;&#10;            &lt;/p&gt;&#13;&#10;            &lt;p class=&quot;text-xs text-slate-500              Web Developer&#13;&#10;            &lt;/p&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;expanded = !expanded&quot;&#13;&#10;          class=&quot;btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25        &gt;&#13;&#10;          &lt;i&#13;&#10;            :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;            class=&quot;fas fa-chevron-down text-sm transition-transform&quot;&#13;&#10;          &gt;&lt;/i&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 py-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;mt-4 flex justify-between&quot;&gt;&#13;&#10;            &lt;div class=&quot;flex flex-wrap -space-x-2&quot;&gt;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white                &gt;&#13;&#10;                  jd&#13;&#10;                &lt;/div&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/div&gt;&#13;&#10;            &lt;button&#13;&#10;              class=&quot;btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;size-5 rotate-45&quot;&#13;&#10;                fill=&quot;none&quot;&#13;&#10;                viewBox=&quot;0 0 24 24&quot;&#13;&#10;                stroke=&quot;currentColor&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  stroke-linecap=&quot;round&quot;&#13;&#10;                  stroke-linejoin=&quot;round&quot;&#13;&#10;                  stroke-width=&quot;2&quot;&#13;&#10;                  d=&quot;M7 11l5-5m0 0l5 5m-5-5v12&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      x-data=&quot;accordionItem(&apos;item-2&apos;)&quot;&#13;&#10;      class=&quot;overflow-hidden rounded-lg border border-slate-150    &gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;flex items-center justify-between bg-slate-150 px-4 py-4 sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;flex items-center space-x-3.5 tracking-wide outline-none transition-all&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;div class=&quot;avatar size-10&quot;&gt;&#13;&#10;            &lt;div&#13;&#10;              class=&quot;is-initial rounded-full bg-warning uppercase text-white&quot;&#13;&#10;            &gt;&#13;&#10;              KG&#13;&#10;            &lt;/div&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;div&gt;&#13;&#10;            &lt;p class=&quot;text-slate-700 line-clamp-1              Konnor Guzman&#13;&#10;            &lt;/p&gt;&#13;&#10;            &lt;p class=&quot;text-xs text-slate-500              Frontend Developer&#13;&#10;            &lt;/p&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;expanded = !expanded&quot;&#13;&#10;          class=&quot;btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25        &gt;&#13;&#10;          &lt;i&#13;&#10;            :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;            class=&quot;fas fa-chevron-down text-sm transition-transform&quot;&#13;&#10;          &gt;&lt;/i&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 py-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;mt-4 flex justify-between&quot;&gt;&#13;&#10;            &lt;div class=&quot;flex flex-wrap -space-x-2&quot;&gt;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white                &gt;&#13;&#10;                  jd&#13;&#10;                &lt;/div&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/div&gt;&#13;&#10;            &lt;button&#13;&#10;              class=&quot;btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;size-5 rotate-45&quot;&#13;&#10;                fill=&quot;none&quot;&#13;&#10;                viewBox=&quot;0 0 24 24&quot;&#13;&#10;                stroke=&quot;currentColor&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  stroke-linecap=&quot;round&quot;&#13;&#10;                  stroke-linejoin=&quot;round&quot;&#13;&#10;                  stroke-width=&quot;2&quot;&#13;&#10;                  d=&quot;M7 11l5-5m0 0l5 5m-5-5v12&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      x-data=&quot;accordionItem(&apos;item-3&apos;)&quot;&#13;&#10;      class=&quot;overflow-hidden rounded-lg border border-slate-150    &gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;flex items-center justify-between bg-slate-150 px-4 py-4 sm:px-5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;div&#13;&#10;          class=&quot;flex items-center space-x-3.5 tracking-wide outline-none transition-all&quot;&#13;&#10;        &gt;&#13;&#10;          &lt;div class=&quot;avatar size-10&quot;&gt;&#13;&#10;            &lt;img&#13;&#10;              class=&quot;rounded-full&quot;&#13;&#10;              src=&quot;images/200x200.png&quot;&#13;&#10;              alt=&quot;avatar&quot;&#13;&#10;            /&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;          &lt;div&gt;&#13;&#10;            &lt;p class=&quot;text-slate-700 line-clamp-1              Derrick Simmons&#13;&#10;            &lt;/p&gt;&#13;&#10;            &lt;p class=&quot;text-xs text-slate-500              UI/UX Designer&#13;&#10;            &lt;/p&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;        &lt;button&#13;&#10;          @click=&quot;expanded = !expanded&quot;&#13;&#10;          class=&quot;btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25        &gt;&#13;&#10;          &lt;i&#13;&#10;            :class=&quot;expanded &amp;&amp; &apos;-rotate-180&apos;&quot;&#13;&#10;            class=&quot;fas fa-chevron-down text-sm transition-transform&quot;&#13;&#10;          &gt;&lt;/i&gt;&#13;&#10;        &lt;/button&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;      &lt;div x-collapse x-show=&quot;expanded&quot;&gt;&#13;&#10;        &lt;div class=&quot;px-4 py-4 sm:px-5&quot;&gt;&#13;&#10;          &lt;p&gt;&#13;&#10;            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi&#13;&#10;            earum magni officiis possimus repellendus. Accusantium adipisci&#13;&#10;            aliquid praesentium quaerat voluptate.&#13;&#10;          &lt;/p&gt;&#13;&#10;          &lt;div class=&quot;mt-4 flex justify-between&quot;&gt;&#13;&#10;            &lt;div class=&quot;flex flex-wrap -space-x-2&quot;&gt;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;div&#13;&#10;                  class=&quot;is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white                &gt;&#13;&#10;                  jd&#13;&#10;                &lt;/div&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;&#13;&#10;              &lt;div class=&quot;avatar size-7 hover:z-10&quot;&gt;&#13;&#10;                &lt;img&#13;&#10;                  class=&quot;rounded-full ring ring-white                  src=&quot;images/200x200.png&quot;&#13;&#10;                  alt=&quot;avatar&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/div&gt;&#13;&#10;            &lt;/div&gt;&#13;&#10;            &lt;button&#13;&#10;              class=&quot;btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80            &gt;&#13;&#10;              &lt;svg&#13;&#10;                xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;                class=&quot;size-5 rotate-45&quot;&#13;&#10;                fill=&quot;none&quot;&#13;&#10;                viewBox=&quot;0 0 24 24&quot;&#13;&#10;                stroke=&quot;currentColor&quot;&#13;&#10;              &gt;&#13;&#10;                &lt;path&#13;&#10;                  stroke-linecap=&quot;round&quot;&#13;&#10;                  stroke-linejoin=&quot;round&quot;&#13;&#10;                  stroke-width=&quot;2&quot;&#13;&#10;                  d=&quot;M7 11l5-5m0 0l5 5m-5-5v12&quot;&#13;&#10;                /&gt;&#13;&#10;              &lt;/svg&gt;&#13;&#10;            &lt;/button&gt;&#13;&#10;          &lt;/div&gt;&#13;&#10;        &lt;/div&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
              </pre>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
