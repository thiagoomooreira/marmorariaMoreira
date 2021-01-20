using MarmorariaMoreira.Context;
using MarmorariaMoreira.Models;
using Microsoft.Ajax.Utilities;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace MarmorariaMoreira.Controllers
{
    public class VendasController : Controller
    {
        private ContextModel _db = new ContextModel();

        // GET: Vendas
        public ActionResult Index()
        {
            List<Entrada> entradas = _db.Entradas.ToList();
            var clientes = _db.Clientes.ToList();

            foreach(var e in entradas)
                e.Cliente = clientes.Find(l => l.Id == e.IdCliente);


            return View(entradas);
        }

        public ActionResult Create()
        {
            ViewBag.Clientes = _db.Clientes.ToList();
            return View();
        }

        [HttpPost]
        public ActionResult Create(Entrada entrada, Cliente cliente, bool cadastrarCliente = false)
        {
            if (cadastrarCliente)
            {
                entrada.Cliente = cliente;
            }
            else
            {
                entrada.IdCliente = cliente.Id;
            }

            _db.Entradas.Add(entrada);
            _db.SaveChanges();

            return RedirectToAction("Index");
        }

        
        public ActionResult Filtrar(string filtroCliente)
        {
            List<Entrada> entradas = _db.Entradas.ToList();
            var clientes = _db.Clientes.ToList();

            foreach (var e in entradas)
                e.Cliente = clientes.Find(l => l.Id == e.IdCliente);

            entradas = entradas.FindAll(l => l.Cliente.Nome == filtroCliente);

            return View("Index", entradas);
        }
    }
}