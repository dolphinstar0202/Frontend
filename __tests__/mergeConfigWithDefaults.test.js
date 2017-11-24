import mergeConfigWithDefaults from '../src/util/mergeConfigWithDefaults'

test('missing top level keys are pulled from the default config', () => {
  const userConfig = {
    colors: { red: '#ff0000' },
    modules: {},
    options: {},
  }

  const defaultConfig = {
    colors: { green: '#00ff00' },
    screens: {
      sm: '576px',
    },
    modules: {},
    options: {},
  }

  const result = mergeConfigWithDefaults(userConfig, defaultConfig)

  expect(result).toEqual({
    colors: { red: '#ff0000' },
    screens: {
      sm: '576px',
    },
    modules: {},
    options: {},
  })
})

test('user modules are merged with default modules', () => {
  const userConfig = {
    modules: { flexbox: false },
    options: {},
  }

  const defaultConfig = {
    modules: {
      flexbox: ['responsive'],
      textAlign: ['responsive'],
    },
    options: {},
  }

  const result = mergeConfigWithDefaults(userConfig, defaultConfig)

  expect(result).toEqual({
    modules: {
      flexbox: false,
      textAlign: ['responsive'],
    },
    options: {},
  })
})

test('user options are merged with default options', () => {
  const userConfig = {
    modules: {},
    options: { prefix: 'tw-' },
  }

  const defaultConfig = {
    modules: {},
    options: {
      prefix: '-',
      important: false,
    },
  }

  const result = mergeConfigWithDefaults(userConfig, defaultConfig)

  expect(result).toEqual({
    modules: {},
    options: {
      prefix: 'tw-',
      important: false,
    },
  })
})
