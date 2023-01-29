import app from 'flarum/admin/app';
import { ConfigureWithOAuthPage } from '@fof-oauth';

app.initializers.add('ianm/oauth-reddit', () => {
  app.extensionData.for('ianm-oauth-reddit').registerPage(ConfigureWithOAuthPage);
});
