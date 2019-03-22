using ProjeOdev.Models.entity;
using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace ProjeOdev.Models.context
{
    public class projeContext:DbContext
    {
        public projeContext() : base("projeContext")
        { }
        public DbSet<Uye> Uyeler { get; set; }
        public DbSet<Yetki> Yetkiler { get; set; }
        public DbSet<Proje> Projeler { get; set; }
        public DbSet<Yorum> Yorumlar { get; set; }
    }
}