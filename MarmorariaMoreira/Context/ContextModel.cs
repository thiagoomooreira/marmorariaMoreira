using MarmorariaMoreira.Models;
using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace MarmorariaMoreira.Context
{
    public class ContextModel : DbContext
    {
        public ContextModel() : base("banco") { }

        public virtual DbSet<Saida> Saidas { get; set; }
        public virtual DbSet<Entrada> Entradas { get; set; }
        public virtual DbSet<Cliente> Clientes { get; set; }

    }
}