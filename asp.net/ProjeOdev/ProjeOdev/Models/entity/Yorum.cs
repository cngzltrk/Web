using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ProjeOdev.Models.entity
{
    public class Yorum
    {
        public int ID { get; set; }
        public string YorumIcerik { get; set; }
        public int UyeID { get; set; }
        public int ProjeID { get; set; }
        public virtual Proje Proje { get; set; }
    }
}