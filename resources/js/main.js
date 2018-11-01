require('./core');

require('./scripts');
require('./plugins/alerts');
require('./plugins/tables');
require('./plugins/forms');

Vue.component('DataModal', require("../components/viewers/DataModal.vue"));
Vue.component('FileLoader', require("../components/media/FileLoader.vue"));
Vue.component('FileViewer', require("../components/media/FileViewer.vue"));



