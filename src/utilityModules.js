import lists from './generators/lists'
import appearance from './generators/appearance'
import backgroundAttachment from './generators/backgroundAttachment'
import backgroundColors from './generators/backgroundColors'
import backgroundPosition from './generators/backgroundPosition'
import backgroundSize from './generators/backgroundSize'
import borderColors from './generators/borderColors'
import borderRadius from './generators/borderRadius'
import borderStyle from './generators/borderStyle'
import borderWidths from './generators/borderWidths'
import cursor from './generators/cursor'
import display from './generators/display'
import flexbox from './generators/flexbox'
import float from './generators/float'
import fonts from './generators/fonts'
import fontWeights from './generators/fontWeights'
import height from './generators/height'
import leading from './generators/leading'
import margin from './generators/margin'
import maxHeight from './generators/maxHeight'
import maxWidth from './generators/maxWidth'
import minHeight from './generators/minHeight'
import minWidth from './generators/minWidth'
import negativeMargin from './generators/negativeMargin'
import opacity from './generators/opacity'
import overflow from './generators/overflow'
import padding from './generators/padding'
import pointerEvents from './generators/pointerEvents'
import position from './generators/position'
import resize from './generators/resize'
import shadows from './generators/shadows'
import textAlign from './generators/textAlign'
import textColors from './generators/textColors'
import textSizes from './generators/textSizes'
import textStyle from './generators/textStyle'
import tracking from './generators/tracking'
import userSelect from './generators/userSelect'
import verticalAlign from './generators/verticalAlign'
import visibility from './generators/visibility'
import whitespace from './generators/whitespace'
import width from './generators/width'
import zIndex from './generators/zIndex'

export default [
  { name: 'lists', generator: lists },
  { name: 'appearance', generator: appearance },
  { name: 'backgroundAttachment', generator: backgroundAttachment },
  { name: 'backgroundColors', generator: backgroundColors },
  { name: 'backgroundPosition', generator: backgroundPosition },
  { name: 'backgroundSize', generator: backgroundSize },
  { name: 'borderColors', generator: borderColors },
  { name: 'borderRadius', generator: borderRadius },
  { name: 'borderStyle', generator: borderStyle },
  { name: 'borderWidths', generator: borderWidths },
  { name: 'cursor', generator: cursor },
  { name: 'display', generator: display },
  { name: 'flexbox', generator: flexbox },
  { name: 'float', generator: float },
  { name: 'fonts', generator: fonts },
  { name: 'fontWeights', generator: fontWeights },
  { name: 'height', generator: height },
  { name: 'leading', generator: leading },
  { name: 'margin', generator: margin },
  { name: 'maxHeight', generator: maxHeight },
  { name: 'maxWidth', generator: maxWidth },
  { name: 'minHeight', generator: minHeight },
  { name: 'minWidth', generator: minWidth },
  { name: 'negativeMargin', generator: negativeMargin },
  { name: 'opacity', generator: opacity },
  { name: 'overflow', generator: overflow },
  { name: 'padding', generator: padding },
  { name: 'pointerEvents', generator: pointerEvents },
  { name: 'position', generator: position },
  { name: 'resize', generator: resize },
  { name: 'shadows', generator: shadows },
  { name: 'textAlign', generator: textAlign },
  { name: 'textColors', generator: textColors },
  { name: 'textSizes', generator: textSizes },
  { name: 'textStyle', generator: textStyle },
  { name: 'tracking', generator: tracking },
  { name: 'userSelect', generator: userSelect },
  { name: 'verticalAlign', generator: verticalAlign },
  { name: 'visibility', generator: visibility },
  { name: 'whitespace', generator: whitespace },
  { name: 'width', generator: width },
  { name: 'zIndex', generator: zIndex },
]
