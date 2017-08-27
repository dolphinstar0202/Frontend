const _ = require('lodash')
const postcss = require('postcss')

function buildMediaQuery(breakpoint) {
  if (_.isString(breakpoint)) {
    breakpoint = {min: breakpoint}
  }

  return _(breakpoint).toPairs().map(([feature, value]) => {
    feature = _.get({
      min: 'min-width',
      max: 'max-width',
    }, feature, feature)

    return `(${feature}: ${value})`
  }).join(' and ')
}

module.exports = function ({breakpoints}) {
  return function (css) {
    Object.keys(breakpoints).forEach(breakpoint => {
      const variableName = `--breakpoint-${breakpoint}`
      const mediaQuery = buildMediaQuery(breakpoints[breakpoint])
      const rule = postcss.atRule({
        name: 'custom-media',
        params: `${variableName} ${mediaQuery}`,
      })
      css.prepend(rule)
    })
  }
}
