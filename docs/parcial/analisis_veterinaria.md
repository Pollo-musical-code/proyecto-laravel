Análisis de la Veterinaria Huellitas

 1. Análisis del Negocio

 Datos Generales
 *Nombre: Veterinaria Huellitas
 *Giro: Atención veterinaria y venta de medicamentos, alimentos y accesorios para mascotas.
 *Tamaño: Pequeña empresa.

 Procesos Clave

 *Ventas: Se registran los productos vendidos y se realiza el cobro al cliente.
 *Servicios: Se agendan consultas, vacunaciones, cirugías, baños y peluquería.
 *Compras: Se solicitan medicamentos y alimentos a los proveedores cuando es necesario reponerlos.
 *Inventario: Actualmente se controla manualmente la cantidad de productos disponibles.
 *Clientes: Se registran los datos de los dueños y sus mascotas.

 Problemas Detectados

1. Pérdida o duplicación de información.
2. Errores en el control del inventario.
3. Dificultad para organizar las citas.
4. Falta de un historial centralizado de las mascotas.
5. Dificultad para obtener información para tomar decisiones.

 Justificación del ERP

La veterinaria necesita un ERP para centralizar la información de clientes, mascotas, productos, ventas y servicios. Esto permitiría reducir errores, mejorar el control del inventario, organizar las citas y obtener información útil para tomar decisiones.

---

 2. Diseño del Modelo de Datos

 Entidades principales

 *Clientes: Dueños de las mascotas.
 *Mascotas: Pacientes de la veterinaria.
 *Productos: Medicamentos, alimentos y accesorios.
 *Categorías: Clasificación de los productos.
 *Servicios: Consultas, vacunaciones, cirugías y peluquería.
 *Citas: Registro de los servicios programados.
 *Ventas: Registro de productos y servicios vendidos.
 *Empleados: Veterinarios y demás trabajadores.

 Relaciones principales

- Un Cliente tiene muchas Mascotas.
- Una **Mascota** pertenece a un **Cliente**.
- Una **Mascota** puede tener muchas **Citas**.
- Una **Cita** corresponde a un **Servicio** y un **Empleado**.
- Una **Categoría** tiene muchos **Productos**.
- Una **Venta** puede contener varios **Productos**.
- Un **Cliente** puede realizar varias **Ventas**.

 Diagrama ER

```mermaid
erDiagram
    CLIENTS ||--o{ PETS : posee
    PETS ||--o{ APPOINTMENTS : tiene
    SERVICES ||--o{ APPOINTMENTS : corresponde
    EMPLOYEES ||--o{ APPOINTMENTS : atiende
    CATEGORIES ||--o{ PRODUCTS : clasifica
    CLIENTS ||--o{ SALES : realiza
    SALES ||--o{ SALE_ITEMS : contiene
    PRODUCTS ||--o{ SALE_ITEMS : incluye
