import _ from 'lodash'
import responsive from '../util/responsive'
import textSizes from '../generators/textSizes'
import textWeights from '../generators/textWeights'
import textFonts from '../generators/textFonts'
import textColors from '../generators/textColors'
import textLeading from '../generators/textLeading'
import textTracking from '../generators/textTracking'
import backgroundColors from '../generators/backgroundColors'
import backgroundSize from '../generators/backgroundSize'
import borderWidths from '../generators/borderWidths'
import borderColors from '../generators/borderColors'
import borderStyles from '../generators/borderStyles'
import rounded from '../generators/rounded'
import display from '../generators/display'
import position from '../generators/position'
import overflow from '../generators/overflow'
import constrain from '../generators/constrain'
import shadows from '../generators/shadows'
import flex from '../generators/flex'

export default function(options) {
  return function(css) {
    css.walkAtRules('tailwind', atRule => {
      if (atRule.params === 'utilities') {
        const utilities = _.flatten([
          textSizes(options),
          textWeights(options),
          textFonts(options),
          textColors(options),
          textLeading(options),
          textTracking(options),
          backgroundColors(options),
          backgroundSize(options),
          borderWidths(options),
          borderColors(options),
          borderStyles(options),
          rounded(options),
          display(options),
          position(options),
          overflow(options),
          constrain(options),
          shadows(options),
          flex(options),
        ])
        css.insertBefore(atRule, responsive(utilities))
        atRule.remove()
      }
    })
  }
}
