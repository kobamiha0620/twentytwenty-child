// TOPページのアニメーション
import { addStickyScrollListener } from "./module/top";
if (window.location.pathname === '/') {
addStickyScrollListener('site-footer');
}
