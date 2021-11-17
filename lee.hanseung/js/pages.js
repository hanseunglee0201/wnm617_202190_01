
const resultQuery = async (options) => {
   //destructure
   let {result,error} = await query(options);
   if(error) {
      throw(error);
      return;
   }
   return result;
}


const ListPage = async() => {
	let result = await resultQuery({
      type:'animals_by_user_id',
      params:[sessionStorage.userId]
   });
   
   $("#page-list .animallist").html(makeAnimalList(result));
}


const MapPage = async() => {
   let result = await resultQuery({
      type:'map_animal_locations',
      params:[sessionStorage.userId]
   });

   let animals = result.reduce((r,o)=>{
      o.icon = o.img;
      if(o.lat && o.lng) r.push(o);
      return r;
   },[]);

   let mapEl = await makeMap("#page-map .map");
   makeMarkers(mapEl,animals);
}


const UserProfilePage = async() => {
	let result = await resultQuery({
      type:'user_by_id',
      params:[sessionStorage.userId]
   });
   let [user] = result;
   $("#page-user-profile [data-role='main']").html(makeUserProfile(user));
}


const AnimalProfilePage = async() => {
	let animal_result = await resultQuery({
      type:'animal_by_id',
      params:[sessionStorage.animalId]
   });

   let [animal] = animal_result;
   $(".animal-profile-top img").attr("src",animal.img);
   $(".animal-profile-bottom .description").html(animal.description);

   let locations_result = await resultQuery({
      type:'locations_by_animal_id',
      params:[sessionStorage.animalId]
   });
   let mapEl = await makeMap("#page-animal-profile .map");
   makeMarkers(mapEl,locations_result);
 }

 const AnimalEditPage = async() => {
   let animal_result = await resultQuery({
      type:'animal_by_id',
      params:[sessionStorage.animalId]
   });

   let [animal] = animal_result;
   $(".animal-profile-top img").attr("src",animal.img);

   $("#animal-edit-name").val(animal.name);
   $("#animal-edit-type").val(animal.type);
   $("#animal-edit-breed").val(animal.breed);
 }



