using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ProjeOdev.Models.entity
{
    public class Uye
    {
        public int ID { get; set; }
        public string UyeAdi { get; set; }
        public string UyeSoyadi { get; set; }
        public string Email { get; set; }
        public string Sifre { get; set; }
        public int YetkiID { get; set; }
        
    }
}