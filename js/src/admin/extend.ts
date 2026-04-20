import Extend from 'flarum/common/extenders';
import ConfigureWithOAuthPage from 'ext:fof/oauth/admin/components/ConfigureWithOAuthPage';

export default [
    new Extend.Admin() //
        .page(ConfigureWithOAuthPage)
];
