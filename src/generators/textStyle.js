import defineClasses from '../util/defineClasses'
import hoverable from '../util/hoverable'

export default function() {
  return hoverable(
    defineClasses({
      italic: { 'font-style': 'italic' },
      roman: { 'font-style': 'normal' },

      uppercase: { 'text-transform': 'uppercase' },
      lowercase: { 'text-transform': 'lowercase' },
      capitalize: { 'text-transform': 'capitalize' },
      'normal-case': { 'text-transform': 'none' },

      underline: { 'text-decoration': 'underline' },
      'line-through': { 'text-decoration': 'line-through' },
      'no-underline': { 'text-decoration': 'none' },

      antialiased: {
        '-webkit-font-smoothing': 'antialiased',
        '-moz-osx-font-smoothing': 'grayscale',
      },
      'subpixel-antialiased': {
        '-webkit-font-smoothing': 'auto',
        '-moz-osx-font-smoothing': 'auto',
      },
    })
  )
}
