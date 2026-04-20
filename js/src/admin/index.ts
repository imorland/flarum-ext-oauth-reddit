import app from 'flarum/admin/app';
// @ts-ignore
import { ConfigureWithOAuthPage } from '@fof-oauth'; // @TODO: import from `ext:vendor/extension/module-path` format.

app.initializers.add('ianm/oauth-reddit', () => {
  app.registry.for('ianm-oauth-reddit').registerPage(ConfigureWithOAuthPage);
});
