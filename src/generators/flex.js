import defineClasses from '../util/defineClasses'

export default function() {
  return defineClasses({
    'flex': {
      'display': 'flex',
    },
    'inline-flex': {
      'display': 'inline-flex',
    },
    'flex-row': {
      'flex-direction': 'row',
    },
    'flex-row-reverse': {
      'flex-direction': 'row-reverse',
    },
    'flex-col': {
      'flex-direction': 'column',
    },
    'flex-col-reverse': {
      'flex-direction': 'column-reverse',
    },
    'flex-wrap': {
      'flex-wrap': 'wrap',
    },
    'flex-wrap-reverse': {
      'flex-wrap': 'wrap-reverse',
    },
    'flex-nowrap': {
      'flex-wrap': 'nowrap',
    },
    'items-start': {
      'align-items': 'flex-start',
    },
    'items-end': {
      'align-items': 'flex-end',
    },
    'items-center': {
      'align-items': 'center',
    },
    'items-baseline': {
      'align-items': 'baseline',
    },
    'items-stretch': {
      'align-items': 'stretch',
    },
    'self-start': {
      'align-self': 'flex-start',
    },
    'self-end': {
      'align-self': 'flex-end',
    },
    'self-center': {
      'align-self': 'center',
    },
    'self-baseline': {
      'align-self': 'baseline',
    },
    'self-stretch': {
      'align-self': 'stretch',
    },
    'justify-start': {
      'justify-content': 'flex-start',
    },
    'justify-end': {
      'justify-content': 'flex-end',
    },
    'justify-center': {
      'justify-content': 'center',
    },
    'justify-between': {
      'justify-content': 'space-between',
    },
    'justify-around': {
      'justify-content': 'space-around',
    },
    'content-center': {
      'align-content': 'center',
    },
    'content-start': {
      'align-content': 'flex-start',
    },
    'content-end': {
      'align-content': 'flex-end',
    },
    'content-between': {
      'align-content': 'space-between',
    },
    'content-around': {
      'align-content': 'space-around',
    },
    'content-stretch': {
      'align-content': 'stretch',
    },
    'flex-1': {
      'flex': '1'
    },
    'flex-auto': {
      'flex': 'auto',
    },
    'flex-initial': {
      'flex': 'initial',
    },
    'flex-none': {
      'flex': 'none',
    },
    'flex-grow': {
      'flex-grow': '1',
    },
    'flex-shrink': {
      'flex-shrink': '1',
    },
    'flex-no-grow': {
      'flex-grow': '0',
    },
    'flex-no-shrink': {
      'flex-shrink': '0',
    },
  })
}
