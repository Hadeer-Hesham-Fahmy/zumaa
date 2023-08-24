<?php

namespace App\Http\Livewire;

use App\Models\Earning;
use App\Models\Vendor;
use App\Models\Order;
use App\Models\Commission;
use App\Models\User;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Carbon\Carbon;
use Numbers\Number;
use Livewire\Component;


class DashboardLivewire extends Component
{
    public function render()
    {

        $user = User::find(\Auth::id());
        if ($user->hasRole('admin')) {
            if (\Schema::hasColumn("commissions", 'admin_commission')) {
                $totalEarnings = Number::n(Commission::sum('admin_commission'))->round(3)->getSuffixNotation();
            } else {
                $totalEarnings = Number::n(Order::mine()->currentStatus('delivered')->sum('total'))->round(3)->getSuffixNotation();
            }
        } else {

            if (\Schema::hasColumn("commissions", 'admin_commission')) {
                $earnedAmount = Commission::whereHas('order', function ($q) {
                    $q->mine();
                })->sum('vendor_commission');
            } else {
                $earning = Earning::firstOrCreate(
                    [
                        "vendor_id" => $user->vendor_id,
                    ],
                    [
                        "amount" => 0,
                    ]
                );

                $earnedAmount = $earning->amount;
            }
            $totalEarnings = Number::n($earnedAmount)->round(3)->getSuffixNotation();
        }

        $totalOrders = Number::n(Order::mine()->count())->round(3)->getSuffixNotation();
        $totalVendors = Number::n(Vendor::mine()->count())->round(3)->getSuffixNotation();
        $totalClients = Number::n(User::client()->count())->round(3)->getSuffixNotation();

        return view('livewire.dashboard', [
            "totalOrders" => $totalOrders,
            "totalEarnings" => $totalEarnings,
            "totalVendors" => $totalVendors,
            "totalClients" => $totalClients,

            "earningChart" => $this->earningChart(),
            "usersChart" => $this->usersChart(),
            "vendorsChart" => $this->vendorsChart(),
            "ordersChart" => $this->ordersChart(),
        ]);
    }




    public function earningChart()
    {

        //
        $chart = (new LineChartModel())->setTitle(__('Total Earning') . ' (' . Date("Y") . ')')->withoutLegend();
        $user = User::find(\Auth::id());

        for ($loop = 0; $loop < 12; $loop++) {
            $date = Carbon::now()->firstOfYear()->addMonths($loop);
            $formattedDate = $date->translatedFormat("M");
            if (empty($user->vendor_id)) {
                if (\Schema::hasColumn("commissions", 'admin_commission')) {
                    $data = Commission::whereMonth("created_at", $date)->whereYear('created_at', $date)->sum('admin_commission');
                } else {
                    $data = Order::mine()->whereMonth("created_at", $date)->whereYear('created_at', $date)->sum('total');
                }
            } else {
                if (\Schema::hasColumn("commissions", 'admin_commission')) {
                    $data = Commission::whereMonth("created_at", $date)
                        ->whereYear('created_at', $date)
                        ->whereHas('order', function ($q) {
                            $q->mine();
                        })
                        ->sum('vendor_commission');
                } else {
                    $data = Earning::where("vendor_id", $user->vendor_id)
                        ->whereMonth("created_at", $date)
                        ->whereYear('created_at', $date)
                        ->sum('amount');
                }
            }
            $data = number_format($data, 2, ".", ",");

            //
            $chart->addPoint(
                $formattedDate,
                $data,
                $this->genColor(),
            );
        }


        return $chart;
    }

    public function usersChart()
    {

        //
        $chart = (new LineChartModel())->setTitle(__('Users This Week'))->withoutLegend();

        for ($loop = 0; $loop < 7; $loop++) {
            $date = Carbon::now()->startOfWeek()->addDays($loop);
            $formattedDate = $date->translatedFormat("D");
            $data = User::whereDate("created_at", $date)->count();

            //
            $chart->addPoint(
                $formattedDate,
                $data,
                $this->genColor(),
            );
        }


        return $chart;
    }

    public function vendorsChart()
    {

        //
        $chart = (new LineChartModel())->setTitle(__('Vendors This Year'))->withoutLegend();

        for ($loop = 0; $loop < 12; $loop++) {
            $date = Carbon::now()->firstOfYear()->addMonths($loop);
            $formattedDate = $date->translatedFormat("M");
            $data = Vendor::whereMonth("created_at", $date)->whereYear('created_at', $date)->count();

            //
            $chart->addPoint(
                $formattedDate,
                $data,
                $this->genColor(),
            );
        }


        return $chart;
    }


    public function ordersChart()
    {

        //
        $chart = (new LineChartModel())->setTitle(__('Total Orders') . ' (' . Date("Y") . ')')->withoutLegend();

        for ($loop = 0; $loop < 12; $loop++) {
            $date = Carbon::now()->firstOfYear()->addMonths($loop);
            $formattedDate = $date->translatedFormat("M");
            $data = Order::mine()->whereMonth("created_at", $date)->whereYear('created_at', $date)->count();

            //
            $chart->addPoint(
                $formattedDate,
                $data,
                $this->genColor(),
            );
        }

        return $chart;
    }





    public function genColor()
    {
        return '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
    }
}
