using MarmorariaMoreira.Context;
using MarmorariaMoreira.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace MarmorariaMoreira.Controllers
{
    public class SaidasController : Controller
    {
        private ContextModel _db = new ContextModel();


        // GET: Saidas
        public ActionResult Index()
        {
            List<Saida> saidas = _db.Saidas.ToList();
            return View(saidas);
        }

        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Create(Saida saida)
        {
            _db.Saidas.Add(saida);
            _db.SaveChanges();

            return RedirectToAction("Index");
        }
    }
}