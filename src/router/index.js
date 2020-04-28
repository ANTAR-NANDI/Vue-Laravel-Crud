import itemdetails from '../components/views/itemdetails'
import About from '../components/views/About'
import Inventory from '../components/views/Inventory'
import Test from '../components/Crud/Test'
import Insert from '../components/Crud/Insert'
import Show from '../components/Crud/Show'
export const routes = [
	{
		path:'',
		component: Inventory
	},
	{
		path:'/about/:id',
		component: About
	},
	{
		path: '/test',
		component: Test
	},
	{
		path: '/insert',
		component: Insert
	},
	{
		path: '/show',
		component: Show
	}
]