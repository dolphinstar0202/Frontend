import _ from 'lodash'
import functions from 'postcss-functions'

export default function(config) {
  const options = config()

  return functions({
    functions: {
      config: function (path) {
        return _.get(options, _.trim(path, `'"`))
      }
    }
  })
}
