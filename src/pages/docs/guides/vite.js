import { useRouteHash } from '@/hooks/useRouteHash'
import { DocumentationLayout } from '@/layouts/DocumentationLayout'
import { FrameworkGuideLayout } from '@/layouts/FrameworkGuideLayout'
import { Steps } from '@/components/Steps'
import { TabBar } from '@/components/Guides/TabBar.jsx'

let tabs = [
  {
    name: 'Using React',
    href: '#react',
    steps: [
      {
        title: 'Create your project',
        body: () => (
          <p>
            Start by creating a new Vite project if you don’t have one set up already. The most
            common approach is to use{' '}
            <a href="https://github.com/vitejs/vite/tree/main/packages/create-vite#readme">
              Create Vite
            </a>
            .
          </p>
        ),
        code: {
          name: 'Terminal',
          lang: 'terminal',
          code: 'npm create vite@latest my-project -- --template react\ncd my-project',
        },
      },
      {
        title: 'Install Tailwind CSS',
        body: () => (
          <p>
            Install <code>tailwindcss</code> and its peer dependencies via npm, and then run the
            init command to generate both <code>tailwind.config.cjs</code> and{' '}
            <code>postcss.config.cjs</code>.
          </p>
        ),
        code: {
          name: 'Terminal',
          lang: 'terminal',
          code: 'npm install -D tailwindcss postcss autoprefixer\nnpx tailwindcss init -p',
        },
      },
      {
        title: 'Configure your template paths',
        body: () => (
          <p>
            Add the paths to all of your template files in your <code>tailwind.config.cjs</code>{' '}
            file.
          </p>
        ),
        code: {
          name: 'tailwind.config.cjs',
          lang: 'js',
          code: `  /** @type {import('tailwindcss').Config} */
  module.exports = {
>   content: [
>     "./index.html",
>     "./src/**/*.{js,ts,jsx,tsx}",
>   ],
    theme: {
      extend: {},
    },
    plugins: [],
  }`,
        },
      },
      {
        title: 'Add the Tailwind directives to your CSS',
        body: () => (
          <p>
            Add the <code>@tailwind</code> directives for each of Tailwind’s layers to your{' '}
            <code>./src/index.css</code> file.
          </p>
        ),
        code: {
          name: 'index.css',
          lang: 'css',
          code: '@tailwind base;\n@tailwind components;\n@tailwind utilities;',
        },
      },
      {
        title: 'Start your build process',
        body: () => (
          <p>
            Run your build process with <code>npm run dev</code>.
          </p>
        ),
        code: {
          name: 'Terminal',
          lang: 'terminal',
          code: 'npm run dev',
        },
      },
      {
        title: 'Start using Tailwind in your project',
        body: () => <p>Start using Tailwind’s utility classes to style your content.</p>,
        code: {
          name: 'App.jsx',
          lang: 'jsx',
          code: `  export default function App() {
    return (
>     <h1 className="text-3xl font-bold underline">
>       Hello world!
>     </h1>
    )
  }`,
        },
      },
    ],
  },
  {
    name: 'Using Vue',
    href: '#vue',
    steps: [
      {
        title: 'Create your project',
        body: () => (
          <p>
            Start by creating a new Vite project if you don’t have one set up already. The most
            common approach is to use{' '}
            <a href="https://github.com/vitejs/vite/tree/main/packages/create-vite#readme">
              Create Vite
            </a>
            .
          </p>
        ),
        code: {
          name: 'Terminal',
          lang: 'terminal',
          code: 'npm create vite@latest my-project -- --template vue\ncd my-project',
        },
      },
      {
        title: 'Install Tailwind CSS',
        body: () => (
          <p>
            Install <code>tailwindcss</code> and its peer dependencies via npm, and then run the
            init command to generate both <code>tailwind.config.cjs</code> and{' '}
            <code>postcss.config.cjs</code>.
          </p>
        ),
        code: {
          name: 'Terminal',
          lang: 'terminal',
          code: 'npm install -D tailwindcss postcss autoprefixer\nnpx tailwindcss init -p',
        },
      },
      {
        title: 'Configure your template paths',
        body: () => (
          <p>
            Add the paths to all of your template files in your <code>tailwind.config.cjs</code>{' '}
            file.
          </p>
        ),
        code: {
          name: 'tailwind.config.cjs',
          lang: 'js',
          code: `  /** @type {import('tailwindcss').Config} */
  module.exports = {
>   content: [
>     "./index.html",
>     "./src/**/*.{vue,js,ts,jsx,tsx}",
>   ],
    theme: {
      extend: {},
    },
    plugins: [],
  }`,
        },
      },
      {
        title: 'Add the Tailwind directives to your CSS',
        body: () => (
          <p>
            Add the <code>@tailwind</code> directives for each of Tailwind’s layers to your{' '}
            <code>./src/style.css</code> file.
          </p>
        ),
        code: {
          name: 'style.css',
          lang: 'css',
          code: '@tailwind base;\n@tailwind components;\n@tailwind utilities;',
        },
      },
      {
        title: 'Start your build process',
        body: () => (
          <p>
            Run your build process with <code>npm run dev</code>.
          </p>
        ),
        code: {
          name: 'Terminal',
          lang: 'terminal',
          code: 'npm run dev',
        },
      },
      {
        title: 'Start using Tailwind in your project',
        body: () => <p>Start using Tailwind’s utility classes to style your content.</p>,
        code: {
          name: 'App.vue',
          lang: 'html',
          code: `  <template>
>   <h1 class="text-3xl font-bold underline">
>     Hello world!
>   </h1>
  </template>`,
        },
      },
    ],
  },
]

export default function UsingVite({ code }) {
  let hash = useRouteHash()

  let selectedTabIndex = tabs.findIndex((tab) => tab.href === hash)

  if (selectedTabIndex === -1) {
    selectedTabIndex = 0
  }

  return (
    <FrameworkGuideLayout
      title="Install Tailwind CSS with Vite"
      description="Setting up Tailwind CSS in a Vite project."
    >
      <TabBar tabs={tabs} selectedTabIndex={selectedTabIndex} />
      <Steps steps={tabs[selectedTabIndex].steps} code={code[selectedTabIndex]} />
    </FrameworkGuideLayout>
  )
}

export function getStaticProps() {
  let { highlightedCodeSnippets } = require('@/components/Guides/Snippets.js')

  return {
    props: {
      code: tabs.map((tab) => highlightedCodeSnippets(tab.steps)),
    },
  }
}

UsingVite.layoutProps = {
  meta: {
    title: 'Install Tailwind CSS with Vite',
    description: 'Setting up Tailwind CSS in a Vite project.',
    section: 'Installation',
  },
  Layout: DocumentationLayout,
  allowOverflow: false,
}
