import path from 'path'

import _ from 'lodash'
import postcss from 'postcss'
import stylefmt from 'stylefmt'

import registerConfigAsDependency from './lib/registerConfigAsDependency'
import substituteTailwindPreflightAtRule from './lib/substituteTailwindPreflightAtRule'
import evaluateTailwindFunctions from './lib/evaluateTailwindFunctions'
import substituteTailwindUtilitiesAtRules from './lib/substituteTailwindUtilitiesAtRules'
import substituteHoverableAtRules from './lib/substituteHoverableAtRules'
import substituteFocusableAtRules from './lib/substituteFocusableAtRules'
import substituteVariantsAtRules from './lib/substituteVariantsAtRules'
import substituteResponsiveAtRules from './lib/substituteResponsiveAtRules'
import substituteScreenAtRules from './lib/substituteScreenAtRules'
import substituteClassApplyAtRules from './lib/substituteClassApplyAtRules'

import mergeConfigWithDefaults from './util/mergeConfigWithDefaults'

const plugin = postcss.plugin('tailwind', config => {
  const plugins = []

  if (!_.isUndefined(config)) {
    plugins.push(registerConfigAsDependency(path.resolve(config)))
  }

  const lazyConfig = () => {
    if (_.isUndefined(config)) {
      return require('../defaultConfig')()
    }

    delete require.cache[require.resolve(path.resolve(config))]
    return mergeConfigWithDefaults(require(path.resolve(config)), require('../defaultConfig')())
  }

  return postcss(
    ...plugins,
    ...[
      substituteTailwindPreflightAtRule(lazyConfig),
      evaluateTailwindFunctions(lazyConfig),
      substituteTailwindUtilitiesAtRules(lazyConfig),
      substituteHoverableAtRules(lazyConfig),
      substituteFocusableAtRules(lazyConfig),
      substituteVariantsAtRules(lazyConfig),
      substituteResponsiveAtRules(lazyConfig),
      substituteScreenAtRules(lazyConfig),
      substituteClassApplyAtRules(lazyConfig),
      stylefmt,
    ]
  )
})

plugin.defaultConfig = function() {
  // prettier-ignore
  throw new Error("`require('tailwindcss').defaultConfig()` is no longer a function, access it instead as `require('tailwindcss/defaultConfig')()`.")
}

module.exports = plugin
