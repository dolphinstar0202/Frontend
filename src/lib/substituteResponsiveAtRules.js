import _ from 'lodash'
import postcss from 'postcss'
import cloneNodes from '../util/cloneNodes'
import buildMediaQuery from '../util/buildMediaQuery'

export default function(options) {
  return function(css) {
    const rules = []

    css.walkAtRules('responsive', atRule => {
      const nodes = atRule.nodes
      rules.push(...cloneNodes(nodes))
      atRule.before(nodes)
      atRule.remove()
    })

    Object.keys(options.screens).forEach(screen => {
      const mediaQuery = postcss.atRule({
        name: 'media',
        params: buildMediaQuery(options.screens[screen]),
      })

      mediaQuery.append(
        rules.map(rule => {
          const cloned = rule.clone()
          cloned.selectors = _.map(rule.selectors, selector => `.${screen}\\:${selector.slice(1)}`)
          return cloned
        })
      )
      css.append(mediaQuery)
    })
  }
}
