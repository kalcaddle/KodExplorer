define(function(require, exports, module) {
    require('lib/jquery-lib');
    require('lib/util');
    require('lib/artDialog/jquery-artDialog');
    core    = require('../../common/core');
    Setting = require('./setting');
    Fav     = require('./fav');
    Group   = require('./group');
    Member  = require('./member');
    Setting.init();
    Fav.bindEvent();
    Member.bindEvent();
    Group.bindEvent();
});
