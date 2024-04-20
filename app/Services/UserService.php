<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Interface\AuthInterface;
use App\Http\Requests\UpdateProfileRequest;

class UserService
{
    public function __construct(
        protected AuthInterface $clientRepository
    ) {
    }

    public function create(array $data)
    {
        return $this->clientRepository->create($data);
    }

    public function update($id, array $data)
    {
        return $this->clientRepository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->clientRepository->delete($id);
    }

    public function all(Request $request)
    {
        return $this->clientRepository->all($request);
    }
    public function Count()
    {
        return $this->clientRepository->Count();

    }
    public function ClientCount()
    {
        return $this->clientRepository->ClientCount();
    }

    public function NowClient()
    {
        return $this->clientRepository->NowClient();

    }
    public function YesterdayClient()
    {
        return $this->clientRepository->YesterdayClient();

    }

    public function CountClientSousYesterdayCount()
    {
        return $this->clientRepository->CountClientSousYesterdayCount();

    }

    public function CountClientSous()
    {
        return $this->clientRepository->CountClientSous();

    }
    public function CountClientEvent()
    {
        return $this->clientRepository->CountClientEvent();


    }
    public function CountClientEventYesterdayCount()
    {
        return $this->clientRepository->CountClientEventYesterdayCount();

    }
    public function get_User()
    {
        return $this->clientRepository->get_User();

    }
    public function Set_Pssword(Request $request)
    {
        return $this->clientRepository->Set_Pssword($request);

    }
    public function updateprofile(UpdateProfileRequest $request)
    {

        return $this->clientRepository->updateprofile($request);

    }
    public function get_User_Club()
    {
        return $this->clientRepository->get_User_Club();

    }
    public function deleteclub(Request $request)
    {
        return $this->clientRepository->deleteclub($request);
    }
    public function destroy($id){
        return $this->clientRepository->destroy($id);
    }

















    // public function search(Request $request){
    //     return $this->clientRepository->search($request);
    // }
    // public function find($id)
    // {
    //     return $this->clientRepository->find($id);
    // }
}