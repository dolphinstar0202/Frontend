import _ from 'lodash'
import postcss from 'postcss'
import cloneNodes from '../util/cloneNodes'

export default function(options) {
  return function(css) {
    css.walkAtRules('hoverable', atRule => {

      atRule.walkRules(rule => {
        // Might be wise to error if the rule has multiple selectors,
        // or weird compound selectors like .bg-blue>p>h1
        rule.selectors =  [
          rule.selector,
          `.\\@${rule.selector.slice(1)}:hover`,
          `.\\@${rule.selector.slice(1)}:focus`
        ]
      })

      const nodes = atRule.nodes
      const rules =  cloneNodes(nodes)

      atRule.parent.insertBefore(atRule, nodes)

      atRule.remove()
    })
  }
}
