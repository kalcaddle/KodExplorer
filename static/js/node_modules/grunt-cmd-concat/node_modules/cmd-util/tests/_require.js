module.exports = function(file) {
  if (process.env.CMD_COVERAGE) {
    file = file.replace('/lib/', '/lib-cov/');
  }
  return require(file);
};
