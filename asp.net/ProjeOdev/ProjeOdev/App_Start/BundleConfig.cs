using System.Web;
using System.Web.Optimization;

namespace ProjeOdev
{
    public class BundleConfig
    {
        // For more information on bundling, visit http://go.microsoft.com/fwlink/?LinkId=301862
        public static void RegisterBundles(BundleCollection bundles)
        {
            bundles.Add(new StyleBundle("~/bundles/style").Include(
                "~/Content/bootstrap.min.css",
                "~/Content/font-awesome.min.css",
                "~/Content/pe-icon-7-stroke.css",
                "~/Content/lightbox.min.css",
                "~/Content/style.default.css",
                "~/Content/custom.css",
                "~/Content/Site.css"));
            bundles.Add(new ScriptBundle("~/bundles/script").Include(
                "~/Scripts/modernizr-2.6.2.js",
                "~/Scripts/jquery-1.10.2.min.js",
                "~/Scripts/bootstrap.min.js",
                "~/Scripts/jquery.cookie.js",
                "~/Scripts/lightbox.min.js",
                "~/Scripts/front.js"
                ));
        }
    }
}
