import Navbar from "@/Components/Navbar/Navbar"
import Topbar from "@/Components/Topbar/Topbar"


const MainLayout = ({children}) => {
  return (
    <>
        <div className="w-full flex">
            {/* navbar */}
            <Navbar />
            {/* main cotent  */}
            <div className="flex-1">
                {/* header top bar  */}
                <Topbar />
                {/* main cotent */}
                <div className="bg-[#F1F5F9] w-full h-full">
                    {children}
                </div>
            </div>
        </div>
    </>
  )
}

export default MainLayout