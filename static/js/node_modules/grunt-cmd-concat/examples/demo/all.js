define('all', ['./self', 'foo'], function(require) {
  require('./self')
  require('foo')
});
