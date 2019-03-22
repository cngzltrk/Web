using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ProjeOdev.Models.entity
{
    public class Proje
    {
        public int ID { get; set; }
        public string ProjeBaslik { get; set; }
        public string ProjeIcerik { get; set; }
        public string Resim { get; set; }
        public DateTime Tarih { get; set; }
        public int UyeID { get; set; }
        public virtual ICollection<Yorum> Yorumlar { get; set; }

    }
}