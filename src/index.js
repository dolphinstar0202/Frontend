import fs from 'fs'
import _ from 'lodash'
import postcss from 'postcss'
import cssnext from 'postcss-cssnext'
import stylefmt from 'stylefmt'

import defaultConfig from './defaultConfig'
import mergeConfig from './util/mergeConfig'

import addCustomMediaQueries from './lib/addCustomMediaQueries'
import generateUtilities from './lib/generateUtilities'
import substituteHoverableAtRules from './lib/substituteHoverableAtRules'
import substituteResponsiveAtRules from './lib/substituteResponsiveAtRules'
import substituteClassApplyAtRules from './lib/substituteClassApplyAtRules'

const plugin = postcss.plugin('tailwind', (options = {}) => {
  const config = mergeConfig(defaultConfig, options)

  return postcss([
    addCustomMediaQueries(config),
    generateUtilities(config),
    substituteHoverableAtRules(config),
    substituteResponsiveAtRules(config),
    substituteClassApplyAtRules(config),
    cssnext(),
    stylefmt,
  ])
})

module.exports = plugin
