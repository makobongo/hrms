import { View } from '../components/index';
import { ViewDashboard } from '../components/dashboard/index'
import { AddEmployees, ViewEmployees, EditEmployees, ViewEmployee } from '../components/employees/index'
import { Profile } from '../components/profile/index'
import { ViewApplicants } from '../components/applicants/index'
import { ViewShortlisted } from '../components/shortlisted/index'
import { ViewBenefits } from '../components/benefits/index'
import { ViewReporting } from '../components/reporting/index'
export const routes = [
    {
        path: '/home',
        component: View,
        children: [
            {
                path: '/',
                component: ViewDashboard
            },
        ]
    },
    {
        path: '/employees',
        component: View,
        children: [
            {
                path: '/',
                component: ViewEmployees
            },
            {
                path:'add',
                component: AddEmployees
            },
            {
                path:'edit',
                component: EditEmployees
            },
            {
                path:':id',
                component: ViewEmployee
            }
        ]
    },
    {
        path: '/benefits',
        component: View,
        children: [
            {
                path: '/',
                component: ViewBenefits
            }
        ]
    },
    {
        path: '/reporting',
        component: View,
        children: [
            {
                path: '/',
                component: ViewReporting
            }
        ]
    },
    {
        path: '/shortlisted',
        component: View,
        children: [
            {
                path: '/',
                component: ViewShortlisted
            }
        ]
    },
    {
        path: '/applicants',
        component: View,
        children: [
            {
                path: '/',
                component: ViewApplicants
            }
        ]
    },
    {
        path: '/profile',
        component: View,
        children: [
            {
                path: '/',
                component: Profile
            }
        ]
    }
]
