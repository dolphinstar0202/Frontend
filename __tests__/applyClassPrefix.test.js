import postcss from 'postcss'
import applyClassPrefix from '../src/util/applyClassPrefix'

test('it prefixes classes with the provided prefix', () => {
  const input = postcss.parse(`
    .foo { color: red; }
    .apple, .pear { color: green; }
  `)

  const expected = `
    .tw-foo { color: red; }
    .tw-apple, .tw-pear { color: green; }
  `

  const result = applyClassPrefix(input, 'tw-').toResult()
  expect(result.css).toEqual(expected)
  expect(result.warnings().length).toBe(0)
})
